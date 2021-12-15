

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
                result = parseInt(n1) - parseInt(n2);
                // console.log(result);
                break;
            case '*':
                result = parseInt(n1) * parseInt(n2);
                // console.log(result);
                break;
            case '/':
                result = parseInt(n1) / parseInt(n2);
                // console.log(result);
                break;
            default: 
                // console.log('error');
                window.location.reload(); 
                break;
            }
            console.log(result);
        