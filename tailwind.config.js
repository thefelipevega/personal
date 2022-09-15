const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
  content: require("fast-glob").sync(
    [
      "source/**/*.{blade.php,blade.md,md,html,vue}",
      "!source/**/_tmp/*", // exclude temporary files
    ],
    { dot: true }
  ),
  theme: {
    extend: {
      fontFamily: {
        sans: ["Cabin", ...defaultTheme.fontFamily.sans],
      },
    },
  },
  plugins: [require("@tailwindcss/typography")],
};
