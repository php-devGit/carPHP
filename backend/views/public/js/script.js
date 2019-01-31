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
            {"title": "Об автосалоне", "url": "/history#about-me"},
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

let loadPage = () => {
    menuConstructor();
};

let loadPageAnchor = () => {
    menuConstructor();
    movedToSection();
};