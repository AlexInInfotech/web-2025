let number = 1;

function IsSimple(num){
    if (num <=1)
    return false;
    for (let i =2; i < math.sqrt(num); i++ ){
        if ( num % i === 0)
          return false;
    }
    return true;
}