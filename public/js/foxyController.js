foxyApp.controller('foxyController',function($scope,$http,foxyService){
    
    //function to check if a number is prime
    $scope.getPrimecheck= function(primeNumbertobe){
        $scope.isprime = foxyService.checkIfPrime(primeNumbertobe);
    }

    //function to display fibonacci series of a number
    $scope.getfibonacciSeries= function(fibonacciNumber){
        $scope.fibonacciSeriesOutput = foxyService.fibonacciSeries(fibonacciNumber);
    }

    $scope.getPalindromeCheck= function(palindrome){
        //Ajax request to check if string is palindrome
        $http.get("/foxyMathGeek/public/logic/palindrome.php?palindrome="+palindrome)
        .success(function(check){
            console.log(check);
            if(check==1){
                $scope.palindromeCheck=' is palindrome';
            }
            else if(check==0){
                $scope.palindromeCheck=' is not palindrome';
            }
        });
    }

    $scope.submitForm = function(isValid) {

        // check to make sure the form is completely valid
        if (isValid) {
          alert('Form is valld');
        }
    
    };

})