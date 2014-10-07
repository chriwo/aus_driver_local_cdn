What does it do?
================

This is a driver for the file abstraction layer (FAL) to support static domains for CDN.

You can create a file storage which allows you to set a public URL to your fileadmin for example. Therefore, you can use a subdomain (e.g. http://static.example.com) that points to your static resources.

Please note that you have to configure your subdomain manually ( e.g. http://static.example.com pointing to your base path, e.g. /var/www/yourTYPO3Instance/fileadmin/ ). So the files can be found at http://example.com/fileadmin/file.txt and http://static.example.com/file.txt. Add a server configuration (htaccess) to prevent this and to deny access to the file without the subdomain.

Requires TYPO3 CMS 6.2
