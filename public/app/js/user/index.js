import { userController } from "./controller.js";

document.addEventListener("DOMContentLoaded", () => {
    document.getElementById("buttonListar").onclick = () => {
        userController.list()
    }
})
