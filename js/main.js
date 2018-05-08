window.addEventListener("load", main)

function main(){
	if(document.location.pathname != "/") return
	
	const msgBox = document.createElement("div")
	document.body.appendChild(msgBox)
	const msg = document.createTextNode("")
	msgBox.appendChild(msg)
	
	const txt = "Javascript"
	const update = function(counter){
		window.setTimeout(function(){
			if(counter > txt.length){
				counter = 0
			}
			msg.nodeValue = txt.slice(0, counter)
			update(counter + 1)
		}, 200)
	}
	
	update(0)
}

