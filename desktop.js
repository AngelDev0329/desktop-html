var Desktop = {
    options: {
        windowArea: ".window-area",
        windowAreaClass: "",
        taskBar: ".task-bar > .tasks",
        taskBarClass: ""
    },

    wins: {},

    setup: function (options) {
        this.options = $.extend({}, this.options, options);
        return this;
    },

    addToTaskBar: function (wnd) {
        $(this.options.taskBar).find(".started").removeClass("started");
        var icon = wnd.getIcon();
        var wID = wnd.win.attr("id");
        var item = $("<span>").addClass("task-bar-item started").html(icon);
        item.data("wID", wID);
        item.appendTo($(this.options.taskBar));
    },

    removeFromTaskBar: function (wnd) {
        var wID = wnd.attr("id");
        var items = $(".task-bar-item");
        var that = this;
        $.each(items, function () {
            var item = $(this);
            if (item.data("wID") === wID) {
                delete that.wins[wID];
                item.remove();
            }
        });

        $(this.options.taskBar).children().last().addClass("started");
    },

    createWindow: function (o) {
        o.onDragStart = function () {
            win = $(this);
            $(".window").css("z-index", 1);

            if (!win.hasClass("modal")) {
                win.css("z-index", 3);
            }

            var wID = win.attr("id");
            var items = $(".task-bar-item");
            $.each(items, function () {
                var item = $(this);
                if (item.data("wID") === wID) {
                    item.addClass("started");
                } else {
                    item.removeClass("started");
                }
            });
        };
        o.onDragStop = function () {
            win = $(this);
            if (!win.hasClass("modal"))
                win.css("z-index", 2);
        };
        o.onWindowDestroy = function (win) {
            Desktop.removeFromTaskBar($(win));
        };

        var w = $("<div>").appendTo($(this.options.windowArea));
        var wnd = w.window(o).data("window");

        var win = wnd.win;
        var shift = Metro.utils.objectLength(this.wins) * 16;
        if (wnd.options.place === "auto" && wnd.options.top === "auto" && wnd.options.left === "auto") {
            win.css({
                top: shift,
                left: shift
            });
        }
        this.wins[win.attr("id")] = wnd;
        if (!win.hasClass("modal")) this.addToTaskBar(wnd);

        return wnd;
    }
};

Desktop.setup();

var w_icons = [
    'rocket', 'apps', 'cog', 'anchor'
];
var w_titles = [
    'rocket', 'apps', 'cog', 'anchor'
];

function createWindow() {
    var index = $.random(0, 3);
    var w = Desktop.createWindow({
        resizeable: true,
        draggable: true,
        width: 300,
        icon: "<span class='mif-" + w_icons[index] + "'></span>",
        title: w_titles[index],
        place: "center",
        content: "<div class='p-2'>This is desktop demo created with Metro 4 Components Library</div>"
    });

    // setTimeout(function () {
    //     w.setContent("New window content");
    // }, 3000);
}

function createWindowWithCustomButtons() {
    var index = $.random(0, 3);
    var customButtons = [
        {
            html: "<span class='mif-rocket'></span>",
            cls: "sys-button",
            onclick: "alert('You press rocket button')"
        },
        {
            html: "<span class='mif-user'></span>",
            cls: "alert",
            onclick: "alert('You press user button')"
        },
        {
            html: "<span class='mif-cog'></span>",
            cls: "warning",
            onclick: "alert('You press cog button')"
        }
    ];
    Desktop.createWindow({
        resizeable: true,
        draggable: true,
        customButtons: customButtons,
        width: 360,
        icon: "<span class='mif-" + w_icons[index] + "'></span>",
        title: w_titles[index],
        place: "center",
        content: "<div class='p-2'>This is desktop demo created with Metro 4 Components Library.<br><br>This window has a custom buttons in caption.</div>"
    });
}

function createWindowModal() {
    Desktop.createWindow({
        resizeable: false,
        draggable: true,
        width: 300,
        icon: "<span class='mif-cogs'></span>",
        title: "Modal window",
        content: "<div class='p-2'>This is desktop demo created with Metro 4 Components Library</div>",
        overlay: true,
        overlayColor: "#1E1E1E",
        modal: true,
        place: "center",
        onShow: function (win) {
            win = $(win);
            win.addClass("ani-swoopInTop");
            setTimeout(function () {
                $(win).removeClass("ani-swoopInTop");
            }, 1000);
        },
        onClose: function (win) {
            win = $(win);
            win.addClass("ani-swoopOutTop");
        }
    });
}

function createWindowYoutube() {
    Desktop.createWindow({
        resizeable: true,
        draggable: true,
        width: 500,
        icon: "<span class='mif-youtube'></span>",
        title: "Youtube video",
        place: "center",
        content: "https://youtu.be/Qz6XNSB0F3E",
        clsContent: "bg-dark"
    });
}

function createWindowWithUrl(url) {
    Desktop.createWindow({
        resizeable: true,
        draggable: true,
        width: 500,
        icon: "<span class='mif-youtube'></span>",
        title: "My website",
        place: "center",
        content: "http://192.168.101.130:4001/login",
        clsContent: "bg-dark"
    });
}

function openCharm() {
    var charm = $("#charm").data("charms");
    charm.toggle();
}

$(".window-area").on("click", function () {
    Metro.charms.close("#charm");
});

$(".charm-tile").on("click", function () {
    $(this).toggleClass("active");
});

// $(".task-bar > .tasks > .task-bar-item").on("click", function () {
// $(".task-bar-item").on("click", function () {
//     onClickTabbar(this)
//     // $(this).toggleClass("active");
// });

// $(document).on('click', '.task-bar .tasks .task-bar-item', function () {
//     alert("Hello");
// });

$('body').on('click', '.task-bar-item', function () {
    if (!$(this).hasClass("started")) {
        $(".task-bar > .tasks").find(".started").removeClass("started");
        $(this).addClass("started");
        let winId = $(this).data("wID");
        var matchedWin = $("#" + winId)
        var currentZIndex = matchedWin.css("z-index");

        var wins = $(Desktop.options.windowArea).children();
        matchedWin.css("z-index", wins.length);

        $.each(wins, function () {
            var win = $(this);
            if (win.attr("id") !== winId) {
                var otherZIndex = win.css("z-index");
                if (otherZIndex > currentZIndex) win.css("z-index", otherZIndex - 1);
            }
        });
    }

    var ctxMenu = document.getElementById("ctxMenu");
    ctxMenu.style.display = "";
    ctxMenu.style.left = "";
    ctxMenu.style.top = "";
});

$('body').on('contextmenu', '.task-bar-item', function (e) {
    console.log("target.id ===> ", e.target.id);
    if (
        e.target.className == "mif-windows" ||
        e.target.className == "mif-comment" ||
        e.target.id == "start-menu-toggle" ||
        e.target.id == "open-charm"
    ) 
    return false;

    const x = e.pageX;
    const y = e.pageY;

    var contextMenu = $("#context-menu");
    var top = (contextMenu.height() + y > $(document).height()) ? $(document).height() - contextMenu.height() - 45 : y;
    contextMenu.css("top", top + "px").css("left", x + "px").addClass("active");
});

// var notepad = document.getElementById("notepad");
// notepad.addEventListener("contextmenu", function (event) {
//     event.preventDefault();
//     var ctxMenu = document.getElementById("ctxMenu");
//     ctxMenu.style.display = "block";
//     ctxMenu.style.left = (event.pageX - 10) + "px";
//     ctxMenu.style.top = (event.pageY - 10) + "px";
// }, false);
// notepad.addEventListener("click", function (event) {
//     var ctxMenu = document.getElementById("ctxMenu");
//     ctxMenu.style.display = "";
//     ctxMenu.style.left = "";
//     ctxMenu.style.top = "";
// }, false);