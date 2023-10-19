function checkObj(obj, checkProp) {
    // Only change code below this line
    if(obj.hasOwnProperty(checkProp)){
      return obj[checkProp];
    }else{
      return "Not Found";
    }
}
console.log(checkObj({gift: "pony", pet: "kitten", bed: "sleigh"}, "gift"));
//   console.log('hello');
const ourMusic = [
  {
    "artist": "Daft Punk",
    "title": "Homework",
    "release_year": 1997,
    "formats": [ 
      "CD", 
      "Cassette", 
      "LP"
    ],
    "gold": true
  }
];
console.log(ourMusic);