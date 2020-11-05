let pins = [];

function setCookie(name, value, exDays) {
    let d = new Date();
    d.setTime(d.getTime() + (exDays * 24 * 60 * 60 * 1000));
    let expires = "expires=" + d.toUTCString();
    document.cookie = name + "=" + value + ";" + expires + ";path=/";
}

function getCookie(name) {
    const value = `; ${document.cookie}`;
    const parts = value.split(`; ${name}=`);
    if (parts.length === 2) return parts.pop().split(';').shift();
}

function render() {
    document.getElementById("pins").innerHTML = `${pins.map(pin =>
        `<div class="card">
            <img class="unpin" src="img/clear-material.svg" alt="unpin">
            <div class="cardheader">${pin.n}</div>
            <div class="cardtext">
                <a href="https://${pin.l}tum.sexy">${pin.l}tum.sexy</a>
            </div>
        </div>`).join('')}` + '<div class="placeholder"></div>'.repeat(3)//seems off, but appears to be common praxis
}

function setupRemoveListeners() {
    let elems = document.getElementsByClassName("unpin")
    for (let unpin of elems) {
        unpin.onclick = function () {
            let newPins = []
            pins.forEach(pin => {
                if (!unpin.parentElement.innerText.startsWith(pin.n)) {
                    newPins.push(pin)
                }
            })
            pins = newPins
            setCookie("pins", JSON.stringify(pins), 100)
            render()
        }
    }
}

window.onload = function () {
    let elems = document.getElementsByClassName("pin")
    for (let pin of elems) {
        pin.onclick = function () {
            const parentContent = pin.parentElement.innerText
            let pinName = parentContent.substr(0, parentContent.lastIndexOf(" — "))
            let pinUrl = parentContent.substr(parentContent.lastIndexOf(" — ") + 3, parentContent.length - (12 + parentContent.lastIndexOf(" — ")))
            pins.push({"n": pinName, "l": pinUrl})
            setCookie("pins", JSON.stringify(pins), 100)
            render()
            setupRemoveListeners()
        }
    }
    pins = JSON.parse(getCookie("pins"))
    render()
    setupRemoveListeners()
}
