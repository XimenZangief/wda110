        // php string vs int 會自動轉型判斷
        // js必須手動轉型
        // typeof() js指令可以查詢資料型態
        // console.log(typeof(desposit));
        let deposit = parseInt(prompt("存款餘額??", 0));
        let option = parseInt(prompt("1.轉帳 2.提款", 0));
        if( option == 2){
            let money = parseInt(prompt("提多少?", 0));
            console.log("存款"+deposit);
            if(deposit > money){
            console.log("你提款" + money);
            }else{
            console.log("餘額不足");
            }
            result= deposit-money;
            console.log("餘額剩下"+result);
        }else{
            console.log("目前只支援提款");
        }
        let money = prompt("提多少?", 0);
        console.log(deposit);
        console.log(option);
        console.log(money);

        console.log("AAA123");
        console.log(typeof("AAA123"));

        let num=123;
        console.log(num);
        console.log(typeof(num));