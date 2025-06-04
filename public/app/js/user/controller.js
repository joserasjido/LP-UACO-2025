import { userService } from "./service.js";

export const userController = {
    list: () => {
        console.table(userService.list())
        let users = userService.list();
        users.forEach(user => {
            
        })
    }
}