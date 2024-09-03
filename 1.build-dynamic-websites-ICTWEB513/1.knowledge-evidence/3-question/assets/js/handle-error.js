function getParameterByName(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, "\\$&");
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return "";
    return decodeURIComponent(results[2].replace(/\+/g, " "));
}

const errorMessage = getParameterByName("error");

if (errorMessage) {
    const errorContainer = document.getElementById("error-message")

    const errorContent = document.createElement("p");

    errorContent.innerText = errorMessage;

    errorContainer.appendChild(errorContent);
    errorContainer.style.display = "block";
}