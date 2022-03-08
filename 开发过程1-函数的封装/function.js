/**
 * 编程的核心是数据处理，以数据为中心
 * 
 * 函数的封装：
 * 1、为什么封装函数：代码重用
 * 2、封装要点
 * 2.1、功能——数据处理的逻辑
 * 2.2、参数——接受参数，已知条件
 * 2.3、返回值——输出、处理结果
 * 
 * 3、举例说明： 求数组元素的平均值   所有元素的和 / 数组元素的个数
 * 解析：
 *    操作对象为数组，所以入参是数组
 *    求平均值，所以逻辑处理就是求平均值
 *    返回值为平均值
 * 扩展：因为要求平均值，必须先求和，所以可以多封装一个求和函数
 */

/**
 * 求数组所有元素的和
 * @param {Object} arr
 */
function sum(arr) {
  let sum = 0
  arr.forEach((item) => {
    sum += item;
  })
  return sum;
}

/**
 * 求数组所有元素的平均值
 * @param {Object} arr
 */
function avg(arr) {
  return sum(arr) / arr.length;
}

var arr = [1, 2, 3, 4, 5];
var arr1 = [1, 2, 3, 4, 8];
var arrAvg = avg(arr);
console.log(avg(arr1));
console.log(arrAvg);