<?php
// wap in php to show consonants and vowels

$x=readline('Enter the character :');

(getType($x=="string") and strlen($x)==1 and ctype_alpha($x))?:exit('Invalid Value Supplied');
$output='';
switch($x) //T(A)=26-->T(A)={v,c}-->T(A)={{a,e,i,o,u},C}
{
	case 'a':
	case 'A':
		$output = "$x is Vowel";
	break;
	
	case 'e':
	case 'E':
		$output = "$x is Vowel";
	break;
	
	case 'i':
	case 'I':
		$output = "$x is Vowel";
	break;
	
	case 'o':
	case 'O':
		$output = "$x is Vowel";
	break;
	
	case 'u':
		$output = "$x is Vowel";
	break;
	
	default:
		$output="$x is consonant";
	break;
}
echo $output;

?>