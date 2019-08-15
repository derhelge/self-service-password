<?php
#==============================================================================
# LTB Self Service Password
#
# Copyright (C) 2009 Clement OUDOT
# Copyright (C) 2009 LTB-project.org
#
# This program is free software; you can redistribute it and/or
# modify it under the terms of the GNU General Public License
# as published by the Free Software Foundation; either version 2
# of the License, or (at your option) any later version.
#
# This program is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU General Public License for more details.
#
# GPL License: http://www.gnu.org/licenses/gpl.txt
#
#==============================================================================

#==============================================================================
# German
#==============================================================================
$messages['phpupgraderequired'] = "PHP upgrade required";
$messages['nophpldap'] = "Sie benötigen die PHP LDAP Erweiterung um dieses Tool zu nutzen";
$messages['nophpmhash'] = "Sie benötigen die PHP mhash Erweiterung um den Samba Modus zu nutzen";
$messages['nokeyphrase'] = "Token encryption requires a random string in keyphrase setting";
$messages['ldaperror'] = "Kein Zugriff auf das LDAP möglich";
$messages['loginrequired'] = "Ihr Login wird benötigt";
$messages['oldpasswordrequired'] = "Ihr altes Passwort wird benötigt";
$messages['newpasswordrequired'] = "Ihr neues Passwort wird benötigt";
$messages['confirmpasswordrequired'] = "Bitte bestätigen Sie Ihr neues Passwort";
$messages['passwordchanged'] = "Ihr Passwort wurde erfolgreich geändert";
$messages['nomatch'] = "Passwörter stimmen nicht überein";
$messages['badcredentials'] = "Matrikelnummer/LoginID oder Passwort inkorrekt";
$messages['passworderror'] = "Passwort wurde vom LDAP nicht akzeptiert";
$messages['title'] = "Passwortverwaltung";
$messages['login'] = "Matrikelnummer/LoginID/E-Mail-Adresse";
$messages['oldpassword'] = "Altes Passwort";
$messages['newpassword'] = "Neues Passwort";
$messages['confirmpassword'] = "Neues Passwort bestätigen";
$messages['submit'] = "Senden";
$messages['tooshort'] = "Ihr Passwort ist zu kurz";
$messages['toobig'] = "Ihr Passwort ist zu lang";
$messages['minlower'] = "Ihr Passwort hat nicht genug Kleinbuchstaben";
$messages['minupper'] = "Ihr Passwort hat nicht genug Großbuchstaben";
$messages['mindigit'] = "Ihr Passwort hat nicht genug Ziffern";
$messages['minspecial'] = "Ihr Passwort hat nicht genug Sonderzeichen";
$messages['sameasold'] = "Ihr neues und Ihr aktuelles Passwort sind identisch";
$messages['policy'] = "Ihr Passwort muss diese Regeln beachten:";
$messages['policyminlength'] = "Minimale Länge:";
$messages['policymaxlength'] = "Maximale Länge:";
$messages['policyminlower'] = "Minimale Anzahl Kleinbuchstaben:";
$messages['policyminupper'] = "Minimale Anzahl Großbuchstaben:";
$messages['policymindigit'] = "Minimale Anzahl Ziffern:";
$messages['policyminspecial'] = "Minimale Anzahl Sonderzeichen:";
$messages['forbiddenchars'] = "Ihr Passwort enthält nicht erlaubte Zeichen";
$messages['policyforbiddenchars'] = "Nicht erlaubte Zeichen:";
$messages['policynoreuse'] = "Ihr neues Passwort darf nicht dasselbe wie Ihr aktuelles Passwort sein.";
$messages['questions']['birthday'] = "Wie lautet Ihr Geburtstag?";
$messages['questions']['color'] = "Wie lautet Ihre Lieblingsfarbe?";
$messages['password'] = "Passwort";
$messages['question'] = "Frage";
$messages['answer'] = "Antwort";
$messages['setquestionshelp'] = "Richten Sie für die Passwortzurücksetzung eine Sicherheitsfrage ein. Sie können anschließend Ihr Passwort <a href=\"?action=resetbyquestions\">hier</a> ändern.";
$messages['answerrequired'] = "Es wurde keine Antwort eingegeben";
$messages['questionrequired'] = "Es wurde keine Frage ausgewählt";
$messages['passwordrequired'] = "Bitte geben Sie Ihr Passwort ein";
$messages['answermoderror'] = "Ihre Antwort wurde nicht gespeichert";
$messages['answerchanged'] = "Ihre Antwort wurde gespeichert";
$messages['answernomatch'] = "Ihre Antwort war nicht korrekt";
$messages['resetbyquestionshelp'] = "Wählen Sie eine Frage Sicherheitsfrage aus und beantworten diese anschließend. Hierzu müssen Sie vorher eine <a href=\"?action=setquestions\">Antwort festgelegt</a> haben.";
$messages['changehelp'] = "Um ein neues Passwort festzulegen müssen Sie zuerst Ihr aktuelles eingeben.";
$messages['changehelpreset'] = "Passwort vergessen?";
$messages['changehelpquestions'] = "<a href=\"?action=resetbyquestions\">Zurücksetzen Ihres Passworts durch Beantwortung von Fragen</a>";
$messages['changehelptoken'] = "<a href=\"?action=sendtoken\">Zurücksetzen Ihres Passworts über Mailaustausch</a>";
$messages['changehelpsms'] = "<a href=\"?action=sendsms\">Zurücksetzen Ihres Passworts per SMS</a>";
$messages['resetmessage'] = "Hallo {fullname},\n\nKlicken Sie hier um Ihr Passwort zurückzusetzen:\n{url}\n\nFalls Sie keine Zurücksetzung beantragt haben, ignorieren Sie dies bitte.";
$messages['resetsubject'] = "Setzen Sie Ihr Passwort zurück";
$messages['sendtokenhelp'] = "Geben Sie Ihren Benutzendennamen und die private E-Mail-Adresse ein um Ihr Passwort zurückzusetzen. Danach klicken Sie auf den Link in der gesendeten Mail.";
$messages['sendtokenhelpnomail'] = "Geben Sie Ihren Benutzendennamen ein um Ihr Passwort zurückzusetzen. Danach klicken Sie auf den Link in der gesendeten Mail.";
$messages['mail'] = "private E-Mail-Adresse";
$messages['mailrequired'] = "Ihre E-Mail-Adresse wird benötigt";
$messages['mailnomatch'] = "Die Mail entspricht nicht dem übermittelten Benutzendennamen";
$messages['tokensent'] = "Eine Bestätigungsmail wurde versandt";
$messages['tokennotsent'] = "Fehler beim Versenden der Bestätigungsmail";
$messages['tokenrequired'] = "Token benötigt";
$messages['tokennotvalid'] = "Token ungültig";
$messages['resetbytokenhelp'] = "Das mit der Mail versandte Token erlaubt Ihnen das Zurücksetzen Ihres Passworts. Um ein neues Token zu erhalten, <a href=\"?action=sendtoken\">klicken Sie hier</a>.";
$messages['resetbysmshelp'] = "Das mit per SMS versandte Token erlaubt Ihnen das Zurücksetzen Ihres Passworts. Um ein neues Token zu erhalten, <a href=\"?action=sendtoken\">klicken Sie hier</a>.";
$messages['changemessage'] = "Hallo {fullname},\n\nIhr Passwort wurde geändert.\n\nWenn Sie dies nicht selbst veranlasst haben, melden Sie dies bitte umgehend Ihrem Administrator.\n\n";
$messages['changesubject'] = "Ihr Passwort wurde geändert";
$messages['badcaptcha'] = "Die reCAPTCHA wurde nicht richtig eingegeben. Versuchen Sie es erneut.";
$messages['notcomplex'] = "Ihr Passwort hat nicht genug verschiedene Klassen von Zeichen";
$messages['policycomplex'] = "Von den Zeichenklassen \"Großbuchstaben\", \"Kleinbuchstaben\", \"Sonderzeichen\", \"Ziffern\" müssen mind. vorkommen:";
$messages['sms'] = "Mobilfunknummer";
$messages['smsresetmessage'] = "Der Token zum Zurücksetzen Ihres Passworts lautet:";
$messages['sendsmshelp'] = "Geben Sie Ihren Benutzendennamen ein, um ein Zurücksetzungstoken zu erhalten. Geben Sie dann das per SMS erhaltene Token ein.";
$messages['smssent'] = "Ein Bestätigungscode wurde per SMS versandt";
$messages['smsnotsent'] = "Fehler beim Versenden der SMS";
$messages['smsnonumber'] = "Kann Mobilfunknummer nicht finden";
$messages['userfullname'] = "Vollständiger Name der/des Benutzenden";
$messages['username'] = "Benutzendenname (entspricht der E–Mail Adresse)";
$messages['smscrypttokensrequired'] = "Sie können nicht per SMS ohne 'crypt_tokens setting' zurücksetzen";
$messages['smsuserfound'] = "Stellen Sie sicher, dass Ihre Benutzendeninformationen korrekt sind und klicken Sie auf 'Senden' um Ihr SMS Token zu erhalten";
$messages['smstoken'] = "SMS token";
$messages['getuser'] = "Mobilfunknummer überprüfen";
$messages['setquestionshelp'] = "Initialisieren oder ändern Sie die Sicherheitsfrage/-antwort. Sie können dann Ihr Passwort <a href=\"?action=resetbyquestions\">hier</a> zurücksetzen.";
$messages['resetbyquestionshelp'] = "Wählen Sie eine Frage und Antwort, um Ihr Passwort zurückzusetzen. Dazu müssen Sie bereits eine <a href=\"?action=setquestions\">Antwort</a> erfasst haben.";
$messages['nophpmbstring'] = "Sie müssen PHP mbstring installieren";
$messages['menuquestions'] = "Frage";
$messages['menutoken'] = "Zurücksetzen per E–Mail";
$messages['menusms'] = "Zurücksetzen per SMS";
$messages['nophpxml'] = "Sie benötigen die PHP XML Erweiterung um dieses Tool zu nutzen";
$messages['tokenattempts'] = "Ungültiges Token, versuchen Sie es erneut";
$messages['emptychangeform'] = "Hier können Sie das Passwort für den Benutzendenaccount des TH-Netzwerks ändern. Das <strong>bisherige Passwort</strong> oder Initialpasswort muss Ihnen bekannt sein. Sollten Sie ihr momentanes Passwort vergessen haben, können Sie ein neues Passwort auch per <a href=\"?action=sendtoken\">E-Mail</a>- oder <a href=\"?action=sendsms\">SMS</a>-Bestätigung festlegen.";  //"Passwort ändern";
$messages['emptysendtokenform'] = "Sie können sich eine E-Mail an das <strong>private Email-Konto</strong>, welches Sie auf <a href=https://meine.thga.de target=_blank>https://meine.thga.de</a> (Mein Studium &rarr; Studienservice &rarr; Meine Daten) hinterlegt haben, zusenden lassen, die einen Link zum Zurücksetzen des Passworts enthält.";
$messages['emptyresetbyquestionsform'] = "Setzen Sie Ihr Passwort zurück";
$messages['emptysetquestionsform'] = "Wählen Sie Ihre Sicherheitsfrage";
$messages['emptysendsmsform'] = "Wenn Sie in ihrem Benutzendenaccount auf <a href=https://meine.thga.de target=_blank>https://meine.thga.de</a> (Mein Studium &rarr; Studienservice &rarr; Meine Daten) eine <strong>Mobilfunknummer hinterlegt</strong> haben, können Sie sich eine SMS mit einem Token zusenden lassen. Mit diesem Token können Sie Ihr Kennwort dann zurücksetzen.";
$messages['sameaslogin'] = "Ihr neues Passwort ist identisch mit Ihrem Benutzendennamen";
$messages['policydifflogin'] = "Ihr neues Passwort darf nicht Ihr Benutzendenname sein.";
$messages['changesshkeyhelp'] = "Geben Sie Ihr Passwort und den neuen SSH-Schlüssel ein.";
$messages['sshkeyerror'] = "SSH-Schlüssel wurde durch das LDAP-Verzeichnis abgelehnt";
$messages['changehelpsshkey'] = "<a href=\"?action=changesshkey\">Ändern Sie Ihren SSH-Schlüssel</a>";
$messages['sshkeyrequired'] = "SSH-Schlüssel ist erforderlich";
$messages['sshkey'] = "SSH Schlüssel";
$messages['sshkeychanged'] = "Ihr SSH Key wurde geändert";
$messages['emptysshkeychangeform'] = "Ändern Sie Ihren SSH-Schlüssel";
$messages['changesshkeymessage'] = "Hallo {login}, \n\nDer SSH-Schlüssel wurde geändert.\n\nWenn Sie diese Änderung nicht eingeleitet haben, wenden Sie sich bitte umgehend an Ihren Administrator.";
$messages['menusshkey'] = "SSH Schlüssel";
$messages['changesshkeysubject'] = "Ihr SSH-Schlüssel wurde geändert";
$messages['pwned'] = "Ihr neues Passwort darf nicht bei einem früheren öffentlichen Passwortleck von einer anderen Website veröffentlicht worden sein.";
$messages['policypwned'] = "Ihr neues Passwort darf nicht bei einem früheren öffentlichen Passwortleck von einer anderen Website veröffentlicht worden sein.";
#
