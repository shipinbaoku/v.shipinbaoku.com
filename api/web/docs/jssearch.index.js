jssearch.index = {"class":[{"f":1,"w":2.7359999999999998}],"reference":[{"f":1,"w":2.28}],"meetingplanner":[{"f":1,"w":4}],"description":[{"f":1,"w":1.2}],"results":[{"f":1,"w":1.2}],"'":[{"f":1,"w":1.44}],"+":[{"f":1,"w":2.48832}],"result":[{"f":1,"w":1.44}],"key":[{"f":1,"w":1.44}],"file":[{"f":1,"w":1.44}],"t":[{"f":1,"w":1.2}],"''":[{"f":1,"w":1.44}],"d":[{"f":1,"w":1.2}]};
jssearch.files = {"1":{"u":".\/\/index.html","t":"Class Reference","d":""}};
jssearch.tokenizeString = function(string) {
		var stopWords = ["a","an","and","are","as","at","be","but","by","for","if","in","into","is","it","no","not","of","on","or","such","that","the","their","then","there","these","they","this","to","was","will","with","yii"];
		return string.split(/[\s\.,;\:\\\/\[\]\(\)\{\}]+/).map(function(val) {
			return val.toLowerCase();
		}).filter(function(val) {
			for (w in stopWords) {
				if (stopWords[w] == val) return false;
			}
			return true;
		}).map(function(word) {
			return {t: word, w: 1};
		});
};