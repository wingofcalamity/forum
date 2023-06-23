//courtesy of https://stackoverflow.com/a/54569758
function invertHex(hex) {
    return (Number(`0x1${hex}`) ^ 0xFFFFFF).toString(16).substring(1).toUpperCase()
}
//get uuid script off usb or rewrite