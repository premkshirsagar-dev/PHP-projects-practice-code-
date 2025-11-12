<?PHP
echo "Enter the number that you want to cheack wheater : ";
$num = trim(fgets(STDIN));

if($num %2==0){
    echo " Given number is Even ";

}
else{
    echo" GIven number is odd ";
}

?>