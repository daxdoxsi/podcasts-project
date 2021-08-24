<?php

echo "\n\n";

echo "   ==================================================================\n";
echo "           COMMAND LINE UTILITY FOR PODCAST AD HOC READER\n";
echo "   ==================================================================\n\n";

echo "\n\n";
echo "        This is the command line utility for the Podcast App";
echo "\n";
echo "        Please choose between the different options available below:";
echo "\n";
echo "\n          a.) Show the list of links available in the system";
echo "\n          b.) Add or remove links categories";
echo "\n          c.) Add or remove links from the system";
echo "\n          d.) Edit the link description";
echo "\n          e.) Show the Podcast available on a specific link";
echo "\n          x.) Exit from the application";
echo "\n\n";
echo "        Type your option here: ";
$option = readkey();

switch ($option){
    case 'a': 
        require PATH_SCREENS.'show_links.php';
        break;
    case 'b': 
        require PATH_SCREENS.'edit_categories.php';
        break;
    case 'c': 
        require PATH_SCREENS.'edit_links.php';
        break;
    case 'd': 
        require PATH_SCREENS.'edit_link_description.php';
        break;
    case 'e': 
        require PATH_SCREENS.'show_podcast_metadata.php';
        break;
    case 'x':
        echo "\n\n";
        echo '   ======================================\n';
        echo '         Program has been finished\n';
        echo '   ======================================\n';
        echo "\n\n";
        exit;
}
