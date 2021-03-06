let menuItems = [
    {"title": "Главная", "url": "/main", "levels": []},
    {"title": "Новости и акции", "url": "/news", "levels": []},
    {"title": "Модельный ряд", "url": "/cars", "levels": []},
    {
        "title": "Сервис", "url": "/service",
        "levels": [
            {"title": "Автосервис", "url": "/service#auto"},
            {"title": "Техническое обслуживание", "url": "/service#tech"},
            {"title": "Запчасти", "url": "/service#repair-parts"}
        ]
    },
    {
        "title": "История компании", "url": "/history",
        "levels": [
            {"title": "Об автосалоне", "url": "/history"},
            {"title": "О марке авто", "url": "/history#about-car"}
        ]
    },
    {"title": "Контакты", "url": "/contacts", "levels": []},
    {"title": "Тест-драйв", "url": "/testdrive", "levels": []},
    {"title": "Схема проезда", "url": "/maps", "levels": []}
];

let getLink = (title, url) => {
    return $("<a></a>").attr('href', url).addClass("nav-link menu-item").text(title);
};

let getButton = (title) => {
    return $("<button></button>")
        .addClass("btn btn-link menu-item dropdown-toggle")
        .attr("data-toggle", "dropdown")
        .text(title);
};

let getList = () => {
    return $("<ul></ul>").addClass("dropdown-menu");
};

let menuConstructor = () => {
    let listItem;

    menuItems.forEach((menuItem) => {
        if (menuItem.levels.length !== 0) {
            let list = getList();

            menuItem.levels.forEach((level) => {
                list.append($("<li></li>").append(getLink(level.title, level.url)));
            });
            listItem = $("<li></li>").addClass("dropdown").append(list).append(getButton(menuItem.title));
        } else {
            listItem = $("<li></li>").append(getLink(menuItem.title, menuItem.url));
        }

        $(".menu").append(listItem);
    });
};

let movedToSection = () => {
    let anchor = window.location.hash.replace('#', '');
    if (document.getElementById(anchor) !== null) {
        let moveTo = document.getElementById(anchor).offsetTop;
        window.scrollTo(0, moveTo);
    }
};

let checkUrl = () => {
    if (window.location.href.indexOf("success=true") > -1) {
        alert("Заявка успешно подана.");
    }
    if (window.location.href.indexOf("success=false") > -1) {
        alert("Заявка не подана, в связи с отсутствие некоторых или всех параметров.");
    }
};

let loadPage = () => {
    menuConstructor();
    checkUrl();
};

let loadPageAnchor = () => {
    menuConstructor();
    movedToSection();
};

function validatePhone(inputPhone) {
    let field = document.getElementById(inputPhone);
    let btn = document.getElementById("btnSendTest");
    let filter = /^[0-9-+]+$/;

    if (filter.test(field.value) && field.value.length > 10) {
        btn.removeAttribute("disabled");
        field.classList.remove("is-invalid");
        field.classList.add("is-valid");
    } else {
        btn.disabled = "true";
        field.classList.remove("is-valid");
        field.classList.add("is-invalid");
    }
}