const options = {
	method: 'GET',
	headers: {
		'X-RapidAPI-Key': '5be2b77654msh62e4ba847375437p1b03cfjsn2d63841d4bc0',
		'X-RapidAPI-Host': 'weather-by-api-ninjas.p.rapidapi.com'
	}
};

fetch('https://weather-by-api-ninjas.p.rapidapi.com/v1/weather?city=vijayanagaram', options)
	.then(response => response.json())
	.then(response => console.log(response))
	.catch(err => console.error(err));