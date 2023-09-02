const showListBtn = document.getElementById("show-list-btn");
const participantsList = document.getElementById("participants-list");

showListBtn.addEventListener("click", () => {
  if (participantsList.style.display === "none") {
    const xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
      if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
        const participants = JSON.parse(xhr.responseText);
        const table = document.createElement("table");
        const headerRow = document.createElement("tr");
        const textHeader = document.createElement("th");
        textHeader.textContent = "Текст";
        const commentHeader = document.createElement("th");
        commentHeader.textContent = "Комментарий";
        headerRow.appendChild(textHeader);
        headerRow.appendChild(commentHeader);
        table.appendChild(headerRow);
        participants.forEach(p => {
          const row = document.createElement("tr");
          const textCell = document.createElement("td");
          textCell.textContent = p.text;
          const commentCell = document.createElement("td");
          commentCell.textContent = p.comment;
          row.appendChild(textCell);
          row.appendChild(commentCell);
          table.appendChild(row);
        });
        participantsList.innerHTML = "";
        participantsList.appendChild(table);
        participantsList.style.display = "block";
        showListBtn.textContent = "Скрыть список";
      }
    };
    xhr.open("POST", "list_script.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.send();
  } else {
    participantsList.style.display = "none";
    showListBtn.textContent = "Показать список";
  }
});