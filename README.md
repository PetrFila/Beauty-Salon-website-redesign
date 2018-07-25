This is a small project to redesign a static website.

Current website:
www.vizazistka-promeny.cz

Preview of the new website:
https://vizazistka-promeny.herokuapp.com/index.html


The file structure contains classic HTML,CSS,JS file structure plus additional two files for deployment to Heroku as described here:

https://medium.com/@winnieliang/how-to-run-a-simple-html-css-javascript-application-on-heroku-4e664c541b0b

Commands for direct deployment to Heroku from local terminal:
If you have already created your Heroku app, you can easily add a remote to your local repository with the heroku git:remote command. All you need is your Heroku app’s name:
`heroku git:remote -a app-name`

To deploy your app to Heroku, you typically use the git push command to push the code from your local repository’s master branch to your heroku remote, like so:
`git push heroku master`

If you want to deploy code to Heroku from a non-master branch of your local repository (for example, testbranch), use the following syntax to ensure it is pushed to the remote’s master branch:
`git push heroku testbranch:master`


A command for running a PHP server localy without installing any packages just for testing sending of a form to an email:

- navigate to your app folder and from there run following command
`php -S 127.0.0.1:8080`

Installing Composer for installing PHP packages.
Composer installed localy into the app's folder
```
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('SHA384', 'composer-setup.php') === '544e09ee996cdf60ece3804abc52599c22b1f40f4323403c44d44fdfdd586475ca9813a858088ffbc1f233e9b180f061') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');" 
```

Installing PHPMailer package
`php composer.phar require phpmailer/phpmailer `

Installing PHPdotenv package
`php composer.phar require vlucas/phpdotenv`


Issues:
- `backface-visibility: hidden;` doesn't work on Mozilla for some reason even with prefix `-moz-backface-visibility: hidden;`

- needed to use prefix for Safari and mobile browsers
`-webkit-backface-visibility: hidden;`

- I couldn't make dotenv file work. The script reads the file .env but the credentials are wrong. 

- The hamburger menu had to be completely re-done by using jQuery because the original CSS version was using a transparent div which was over contact form and submit button so they weren't accessible.

Frontend form validation taken from this tutorial:
https://formden.com/blog/validate-contact-form-jquery