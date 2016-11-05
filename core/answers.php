<?php
echo "answers loadedd   <br>";
switch($message) {
        case '/tits':  
     include 'core/commands/tits/tits.php';
        break;  
        case 'tits':  
     include 'core/commands/tits/tits.php';
        break;

        case '/gif':  
    include 'core/commands/gif/gif.php';
        break;  

        case '/commands':
            include 'commands/commands.php';
        break;
        case '/bash':
            include 'commands/bash.php';
        break;
        case '/calendar':
            include 'commands/calendar.php';
        break;
        case '/sram':
            include 'commands/sram.php';
        break;
        case 'Бот ливни':
    include 'commands/leave/leave.php';
        break;








        case '/commands@phphelperbot':
            include 'commands/commands.php';
    break;
        case '/bash@phphelperbot':
            include 'commands/bash.php';
    break;
        case '/calendar@phphelperbot':
            include 'commands/calendar.php';
    break;
        case '/sram@phphelperbot':
            include 'commands/sram.php';
    break;
        case '/gif@phphelperbot':  
    include 'core/commands/gif/gif.php';
        break; 
            case '/tits@phphelperbot':  
     include 'core/commands/tits/tits.php';
        break;  

  default:
            //include 'commands/default.php';
        break;
}
?>
