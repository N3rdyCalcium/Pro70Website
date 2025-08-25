function getFibonacci(event) {
  event.preventDefault()
  try {
    var num = +document.getElementById("fibo").value;
    var fib0 = 0;
    var fib1 = 1;
    var next;
    const fib = [];
    for (var i = 0; i < num - 1; i++) {
      next = fib0 + fib1;
      fib0 = fib1;
      fib1 = next;
      fib.push(fib0)
      document.getElementById("result").innerHTML = fib;
    }
  } catch (err) {
    document.getElementById("result").innerHTML = err;
  }
}