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
    {"title": "Тест драйв", "url": "/test-drive", "levels": []},
    {"title": "Схема проезда", "url": "/maps", "levels": []}
];

let getLink = (title, url) => {
    return $("<a></a>").attr('href', url).addClass("nav-link menu-item").text(title);
};

let getButton = (title) => {
    return $("<button></button>")
        .addClass("btn btn-default dropdown-toggle")
        .attr("data-toggle", "dropdown")
        .text(title);
};

let getList = () => {
    return $("<ul></ul>").addClass("dropdown-menu");
};

let menuConstructor = () => {
    let link, listItem, list, linkItem;

    menuItems.forEach((item) => {
        list = getList();
        link = getLink(item.title, item.url);

        if (item.levels.length !== 0) {
            item.levels.forEach((level) => {
                linkItem = $("<li></li>").append(getLink(level.title, level.url));
                list.append(linkItem);
            });
            listItem = $("<li></li>").addClass("dropdown").append(list).append(getButton(item.title));
        } else {
            listItem = $("<li></li>").append(link);
        }

        $(".menu").append(listItem);
    });
};