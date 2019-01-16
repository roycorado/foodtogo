


<?php require_once '../partials/template.php'; ?>

<?php function get_page_content() { ?>


<?php

  // Start with 2 as your first prime
  primes = [2];
  
  // Solve for primes
  if( n==2 ){
    return [2];
    // return primes;
  }
  
  // Returning a null set
  if( n<2 ){
    return undefined;
  }
  
  for(x=3; x<=n; x++){
    
    isPrime = true;
    
    for(y=0; y<primes.length; y++){
      
      if(x%primes[y]==0){
        isPrime = false;
      }
      
      if(isPrime){
        primes.push(x);
      }
      
    }
    
  }

?>

<?php } ?>

