#!/usr/bin/perl
use CGI ':standard';
use strict;

my $name = param('name');

my $gender = param('gender');

my $year = param('year');

print header('text/html');
print "<html>\n";
print "<link href='/lab04/part2/style.css' rel='stylesheet'>\n";
print "<link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>\n";
print "<style> \n body { \n font-family: 'Sofia';font-size: 50px;color: #da2727;text-align: center;display: flex;justify-content: center; /* align horizontal */ align-items: center; /* align vertical */ \n}\n</style>\n";
print "<body class='bg'>Hello, ${name}! Did you know you are a ${gender} ${year} student !?!</body>\n";
print "</html>";