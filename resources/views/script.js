
function list(){
    let X =  0;
    let Y = 0;
    let list = 0;
    let limit = 7;
    
    for(let index = 1; index <= limit; index++){
        X = index;
        Y =  index * X;
        list = X * Y;
        console.log(X, Y, list);
    }

}


console.log(list());