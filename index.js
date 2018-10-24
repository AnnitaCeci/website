
// A very basic web server in node.js
// Stolen from: Node.js for Front-End Developers by Garann Means (p. 9-10)

var port = 3001;
var serverUrl = "127.0.0.1";
var nodemailer = require('nodemailer');
var http = require("http");
var path = require("path");
var fs = require("fs");
var checkMimeType = true;

console.log("Starting Datyra server at " + serverUrl + ":" + port);

http.createServer( function(req, res) {

	var now = new Date();


	var filename = req.url || "/index.html";
	var ext = path.extname(filename);
	var localPath = __dirname;
	var validExtensions = {
		".html" : "text/html",
		".js": "application/javascript",
		".css": "text/css",
		".txt": "text/plain",
		".jpg": "image/jpeg",
		".gif": "image/gif",
		".png": "image/png",
		".woff": "application/font-woff",
		".woff2": "application/font-woff2",
		".otf": "application/font-otf",
		".map": "application/map",
		".ico": "image/ico",
		".mp4": "video/mp4",
	};

	var validMimeType = true;
	var mimeType = validExtensions[ext];
	if (checkMimeType) {
		validMimeType = validExtensions[ext] != undefined;
	}

	if (validMimeType) {
		localPath += filename;
		fs.exists(localPath, function(exists) {
			if(exists) {
				console.log("Serving file: " + localPath);
				getFile(localPath, res, mimeType);
			} else {
				console.log("File not found: " + localPath);
				res.writeHead(404);
				res.end();
			}
		});

	} else {
		console.log("Invalid file extension detected: " + ext + " (" + filename + ")")
		console.log("Trying index.html: " )
		localPath += filename + "index.html";
		fs.exists(localPath, function(exists) {
			if(exists) {
				console.log("Serving file: " + localPath);
				getFile(localPath, res,"text/html");
			} else {
				console.log("File not found: " + localPath);
				res.writeHead(404);
				res.end();
			}
		});
	}

}).listen(port, serverUrl);

function getFile(localPath, res, mimeType) {
	fs.readFile(localPath, function(err, contents) {
		if(!err) {
			res.setHeader("Content-Length", contents.length);
			if (mimeType != undefined) {
				res.setHeader("Content-Type", mimeType);
			}
			res.statusCode = 200;
			res.end(contents);
		} else {
			res.writeHead(500);
			res.end();
		}
	});
}

