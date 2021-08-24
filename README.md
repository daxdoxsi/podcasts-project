# Podcasts-Project
- Special version dedicated to *Proximity*

## Description
This a test provided by the Recruitment Department in order
to evaluate the knowledge of PHP and communication with other
servers in order to retrieve information about Podcast lists
and updates on the list.  The system will include a basic 
command line application that makes the process easily with only
one command and also include the web version that is an application
that performs the funcionality but include features like React in
the user interface and the posibility to hear the podcasts in a
custom player. I should have the option to download the podcast in
MP3 format and also the user can save your favorite podcast in your
private sessión. 

Additionally the user can share the podcast links on Twitter, Facebook,
Instagram and mail. Also the private user can assign keywords to the
Podcast for easy localization and arrange the podcast by specific
folders.

Any new podcast, will be display an alert and the possibility to hear
the podcast inmediately o sent the podcast to the pending to hear
podcast.

Also the user can program a basic podcast clean up every period of time
since the las time the podcast was heared, keeping the library only
with the most active podcast or better calified by the user.

In a further version the user can be add comments for specific time in
the podcast, given to the user an special tool to locate the main
subjects of a podcast and the oportunity to review later. Also it could
include a reader in order to facilitate stay up-to-date meanwhile the
user work in other computer tasks.

Enjoy it!

## Install Instructions
Configure your Apache Server files to point to the public_html folder 
included on this repository, don't forget to define your test domain in
your hosts file pointing the the specific IP and also update the
site-available file for that domain.  The test domain should appear as
server name with a new local domain like podcast.local as in the hosts
file, run with sudo a2ensite config_file_name and then restart the server.

This basic version works with plain files and includes a file called 
podcast.php in the root of the repository to execute the functions by
command line without the requirement to have web server like Apache.

If a docker-compose.json file appears on the root repository don't
hesitate on run it and docker will create and define the necesary
files with no effort.

Developed by:
David Madrigal Miller - 2021
