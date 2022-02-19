/**
 * 求数组元素的和
 */
function sum (arr) {
  let sum = 0
  arr.forEach((item) => {
    sum += item;
  })
  return sum;
}

/**
 * 求数组元素的平均值
 */
function avg (arr) {
  return sum(arr) / arr.length;
}

let arr = new Array(1, 2, 3);
// console.log(typeof(arr));

function ArrUtil() {
  
  this.avg = function (arr) {
    return this.sum(arr) / arr.length;
  }
  
  this.sum  = function (arr) {
    let sum = 0
    arr.forEach((item) => {
      sum += item;
    })
    return sum;
  }
}

let arrUtil2 = {
  sum: function (arr) {
    let sum = 0
    arr.forEach((item) => {
      sum += item;
    })
    return sum;
  }
}

let arrUtil1 = {
  avg: function (arr) {
    return arrUtil2.sum(arr) / arr.length;
  }
}



console.log(arrUtil1.avg([1, 2, 15]));