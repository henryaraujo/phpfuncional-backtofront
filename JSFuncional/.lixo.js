var uniqueArray = array.filter(function(elem, index, array) {
        return array.indexOf(elem) === index;
    }
);

array.filter((elem, index, arr) => arr.indexOf(elem) === index);

var uniqueArray = duplicatesArray.filter(function(elem, pos) {
  return duplicatesArray.indexOf(elem) == pos;
});

var word = [{id:1,name:'joao'},{id:1,name:'joao'},{id:2,name:'maria'}];

var qtd = word.reduce(function(acc,e){
		acc[e] = (e in acc ? acc[e]+1 : 1); 
		return acc
	});

var qtd = word.reduce(function(acc,e){
         acc[e] = (e in acc ? acc[e]+1 : 1);
         acc.qtde = acc[e];
		return acc
});