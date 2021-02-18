export class TranslationCore {
    constructor(trans) {
        this.trans = trans;
    }

    translate(text) {
        const key = text.split('.');

        let translated = this.trans;
        for (let i = 0; i < key.length; i++) {
            if (typeof translated[key[i]] === 'undefined') {
                translated = this.trans['text'][text];
                break;
            }
            translated = translated[key[i]]
        }

        if (typeof translated !== 'string') {
            return text;
        }

        return translated;
    }

    replaceAttribute(text, replaces) {
        if (typeof replaces !== 'object') {
            replaces = {};
        }

        const replacesKeys = Object.keys(replaces);

        for (let i = 0; i < replacesKeys.length; i++) {
            const replaceKey = replacesKeys[i];
            text = text.replace(`:${replaceKey}`, replaces[replaceKey]);
        }

        return text;
    }
}
