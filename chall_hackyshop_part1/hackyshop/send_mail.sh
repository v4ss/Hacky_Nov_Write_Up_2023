#!/bin/bash

swaks -t $1 -s smtp-mail.outlook.com:587 -tls -au hackyshop.ctf@hotmail.com -ap Lechallengehackyshop1* -f hackyshop.ctf@hotmail.com --h-Subject "Reinitialisation mot de passe" --body "Pour réinitialiser votre mot de passe, merci d'entrer le code suivant dans le formulaire : ${2}"
