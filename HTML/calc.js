// alert("112233");
        // console.log("console");

        //顯示name&num
        // let name = prompt("input ur name", "");
        // let num = prompt("input ur num", "");
        // console.log(name + num);

        //combine
        // let n1 = prompt("input n1", "");
        // let n2 = prompt("input n2", "");
        // console.log(n1); console.log(n2);
        // if (n1 > n2) {
        //     console.log ( n1 + '>' + n2);
        // } else if (n1 < n2) {
        //     console.log ('n1 < n2');
        // }
        // else {
        //     result = n1 + '=' + n2;
        //     console.log (result);
        // }
        //cashpay
        // let cash = prompt("input cash", 0);
        // let spend = prompt("input spend", 0);
        // result= cash - spend;
        // if(result>0){
        //     console.log( '找' + result + '元');
        // }else if(spend == cash){
        //     console.log( '剛剛好');          
        // }else{
        //     console.log( '欠'+ -result +'元');
        // }

        let n1 = prompt("switch n1", 0);
        let n2 = prompt("switch n2", 0);
        let option = prompt("switch option", 0);

        let result = "";

        switch (option) {
            case '+':
                result = parseInt(n1) + parseInt(n2);
                // console.log(result);
                break;
            case '-':
                result = n1 - n2;
                // console.log(result);
                break;
            case '*':
                result = n1 * n2;
                // console.log(result);
                break;
            case '/':
                result = n1 / n2;
                // console.log(result);
                break;
            default: 
                // console.log('error');
                window.location.reload(); 
                break;
            }
            console.log(result);
        