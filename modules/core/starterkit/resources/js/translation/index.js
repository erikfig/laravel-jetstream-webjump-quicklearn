import {TranslationCore} from './Translation';

const trans = {};
const install = function (vue) {
    let translation = null;
    let instance = null;

    const getInstance = () => {
        if (!instance) {
            instance = new vue;
        }

        return instance;
    }

    vue.prototype.__ = (text, replaces) => {
        const v = getInstance();
        const {$page} = v;
        const {props} = $page;

        if (!translation) {
            translation = new TranslationCore(props.trans);
        }

        const translated = translation.translate(text);
        return translation.replaceAttribute(translated, replaces);
    }
}

trans.install = install;

export default trans;
