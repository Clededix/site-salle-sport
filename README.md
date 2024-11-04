Exercice Laravel - "Sports de salle"


README.md -> English version (to practice)
website -> FrEnglich version (to practice also)


Description :

This project aims to master the basics of a website creation using the Laravel framework. It is a showcase website (site vitrine), based on the Model-View-Controller (MVC).

I've been asked to create a small showcase website for an associative gym. For fun, as it is the very beginning of this project, I turned it into a gym for snails (because why not). At the moment, it includes the following pages :
Accueil : Intro to the association (bk : photo)
Cours : Weekly class schedule (bk : photo)
Tarifs : Pricing (bk : photo)
Contact : Address, access map, and contact form (bk : photo)
Mentions Légales : Mandatory legal information (bk : photo)


Technologies used :

VSCode
Bash
Git
Github

PHP Laravel
Javascript
HTML CSS


Install :

Open Bash

Use cd to go where you want to clone the project
cd /path/to/repo

Clone the repo
git clone <repository-url>

Navigate in the projet's repo :
cd site-salle-sport

Open the website with usual codes 
php artisan serve
npm run dev

All done


Notes to Daichi :)

This project is not what it was supposed to be. I coulnd't find out why the style and script files wouldn't work (stylizing the web pages). BUT while I was correcting a few mistakes an rerereading the instructions, I finally understood why... I didn't linked my blade files with parent/child relation with the @yield or @section/@endsection tags, leaving the content empty. Instead I've written again and again the HTML CSS code not using one of the Laravel's coolest tool ever ! I won't correct my mistake because now that I understand why, I don't consider it like an issue. Next time, I won't make this same mistake hehehe
Another mistakes that I'll correct : 
- <br> tags to transform into margin/padding in CSS,
- the images are to be cut because they are too heavy.