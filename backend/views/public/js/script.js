let menuItems = [
    {"title": "Главная", "url": "/main", "levels": []},
    {"title": "Новости и акции", "url": "/news", "levels": []},
    {"title": "Модельный ряд", "url": "/cars", "levels": []},
    {
        "title": "Сервис", "url": "/service",
        "levels": [
            {"title": "Автосервис", "url": "/auto-service"},
            {"title": "Техническое обслуживание", "url": "/tech-service"},
            {"title": "Запчасти", "url": "/repair-parts"}
        ]
    },
    {
        "title": "История компании", "url": "/history",
        "levels": [
            {"title": "Об автосалоне", "url": "/about-me"},
            {"title": "О марке авто", "url": "/about-car"}
        ]
    },
    {"title": "Контакты", "url": "/contacts", "levels": []},
    {"title": "Тест драйв", "url": "/testdrive", "levels": []},
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
    let link, listItem, list, linkItem;

    menuItems.forEach((menuItem) => {
        list = getList();
        link = getLink(menuItem.title, menuItem.url);

        if (menuItem.levels.length !== 0) {
            menuItem.levels.forEach((level) => {
                linkItem = $("<li></li>").append(getLink(level.title, level.url));
                list.append(linkItem);
            });
            listItem = $("<li></li>").addClass("dropdown").append(list).append(getButton(menuItem.title));
        } else {
            listItem = $("<li></li>").append(link);
        }

        $(".menu").append(listItem);
    });
};