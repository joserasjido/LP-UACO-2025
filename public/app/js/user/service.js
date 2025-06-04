const users = [
    {id: 1, apellido: "Perez", nombres: "Luis", cuenta: "luis.perez", correo: "luis@prueba.com"},
    {id: 2, apellido: "Lopez", nombres: "Daniel", cuenta: "daniel.lopez", correo: "daniel@prueba.com"},
    {id: 3, apellido: "Ugarte", nombres: "Miguel", cuenta: "miguel.ugarte", correo: "miguel@prueba.com"},
    {id: 4, apellido: "Paez", nombres: "Fernando", cuenta: "fer.paez", correo: "fernando@prueba.com"},
    {id: 5, apellido: "Jerez", nombres: "Jose", cuenta: "jose.jerez", correo: "jose@prueba.com"}
]

export const userService = {
    load: id => {
        //return users[pos] Devuelve un objeto usuario
    },
    save: user => {
        user.id = users.length()
        users.push(user)
    },
    update: user => {

    },
    delete: id => {

    },
    list: filters => {
        return users
    }
}