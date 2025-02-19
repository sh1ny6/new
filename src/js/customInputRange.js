const
	range = document.getElementById('range'),
	rangeV = document.getElementById('rangeV'),
	setValue = () => {
		const
			newValue = Number((range.value - range.min) * 100 / (range.max - range.min)),
			newPosition = 14 - (newValue * 0.3);
		rangeV.innerHTML = `<span>${range.value}</span>`;
		rangeV.style.left = `calc(${newValue}% + (${newPosition}px))`;
	};
document.addEventListener("DOMContentLoaded", setValue);
range.addEventListener('input', setValue);

const rangeInputs = document.querySelectorAll('input[type="range"]')

function handleInputChange(e) {
	let target = e.target
	if (e.target.type !== 'range') {
		target = document.getElementById('range')
	}
	const min = target.min
	const max = target.max
	const val = target.value

	target.style.backgroundSize = (val - min) * 100 / (max - min) + '% 100%'
}

rangeInputs.forEach(input => {
	input.addEventListener('input', handleInputChange)
})