foxyApp.service('foxyService',function(){

    this.checkIfPrime = function(number){
        
        var isPrime = ' is a prime number';

        if(number<=1){
            isPrime = ' is not a prime number'; 
        }

        for(var i=2;i<=(number/2);i++){
            if(number%i==0){
                isPrime = ' is not a prime number';
                break;
            }  
        }
        
        return isPrime;
        
    }

    this.fibonacciSeries = function(number){
        var a = 1, b = 0, temp=0; 
        var arrayFibonacci = [];
        var newone = 0;
        if(number<1){
            arrayFibonacci.push(0);
            return arrayFibonacci;
        }
        else{
            arrayFibonacci.push(1);
            if (number == 1){
                return arrayFibonacci;
            }
            while (true){
                newone = a + b;
                if (newone > number){
                    break;
                }
                arrayFibonacci.push(newone);
                b = a;
                a = newone;
            }
        }
        return arrayFibonacci;
    }

})