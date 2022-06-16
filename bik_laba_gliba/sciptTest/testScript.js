const base = 'http://localhost:8000/api'
let token = ''


fetch(base + '/register', {
    method: 'POST',
    headers: new Headers({
        Accept: 'application/json'
    }),
    body: JSON.stringify({
        name: 'user',
        email: 'user@example.ru',
        password: 'test',
        password_confirmation: 'test',
    })
})
    .then(result => result.json())
    .then((data) => {
        token = data.token
    })

if (token == null) {
    console.log('smth wrong')
}



fetch(base + '/login', {
    method: 'POST',
    headers: new Headers({
        Accept: 'application/json'
    }),
    body: JSON.stringify({
        email: 'user@example.ru',
        password: 'test'
    })
})
    .then((response) => response.json())
    .then((data) => {
        token = data.token
        console.log(data)
    })

fetch(base + '/allCourses', {
    headers: new Headers({
        Accept: 'application/json',
        Authorization: "Bearer " + token
    })
})
    .then(resp => resp.json())
    .then(data => console.log(data.courses))


fetch(base + '/allDevolopes', {
        headers: new Headers({
                Accept: 'application/json',
                Authorization: "Bearer " + token
            })
})
    .then(response=>response.json())
    .then(response=>console.log(response))




