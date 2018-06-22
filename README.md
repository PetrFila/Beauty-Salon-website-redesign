This is a small project to redesign a static website.

Preview of the website:
https://vizazistka-promeny.herokuapp.com/index.html


The file structure contains classic HTML,CSS,JS file structure plus additional two files for deployment to Heroku as described here:

https://medium.com/@winnieliang/how-to-run-a-simple-html-css-javascript-application-on-heroku-4e664c541b0b


A command for running a PHP server localy without installing any packages just for testing sending of a form to an email:

- navigate to your app folder and from there run following command
`php -S 127.0.0.1:8080`



Issues:
- `backface-visibility: hidden;` doesn't work on Mozilla for some reason even with prefix `-moz-backface-visibility: hidden;`

- needed to use prefix for Safari and mobile browsers
`-webkit-backface-visibility: hidden;`

Form validation taken from this tutorial:
https://formden.com/blog/validate-contact-form-jquery