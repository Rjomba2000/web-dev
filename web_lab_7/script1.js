function isPrimeNumber(n) {
    let isPrime = true;
    let len;
    if (typeof n == 'number') {
        for (let j = 2; j < n; j++) {
            if (n % j == 0) {
                isPrime = false;
                break;
            }
        }
        if (isPrime && (n != 1)) {
            console.log(n + ' is prime number');
        } else {
            console.log(n + ' is not prime number');
        }
    } else {
        if ((typeof n == 'object') && (n.length != undefined) && (n.length != 0)) {
            len = n.length;
            for (let i = 0; i < len; i++) {
                isPrime = true;
                for (let j = 2; j < n[i]; j++) {
                    if (n[i] % j == 0) {
                        isPrime = false;
                        break;
                    }
                }
                if (isPrime && (n[i] != 1)) {
                    console.log(n[i] + ' is prime number');
                } else {
                    console.log(n[i] + ' is not prime number');
                }
            }
        } else {
            console.log('wrong input');
        }
    }
}