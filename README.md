This is a small project to redesign a static website.
The file structure contains classic HTML,CSS,JS file structure plus additional two files for deployment to Heroku as described here:

https://medium.com/@winnieliang/how-to-run-a-simple-html-css-javascript-application-on-heroku-4e664c541b0b

Issues:
- `backface-visibility: hidden;` doesn't work on Mozilla for some reason even with prefix `-moz-backface-visibility: hidden;`

- needed to use prefix for Safari and mobile browsers
`-webkit-backface-visibility: hidden;`