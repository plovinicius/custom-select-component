export function dropdown() {
    return {
        ref: null,
        options: [],
        selected: [],
        show: false,
        open() { this.show = true },
        close() { this.show = false },
        isOpen() { return this.show === true },
        select(index, event) {
            if (!this.options[index].selected) {
                this.options[index].selected = true;
                document.querySelector('#'+ this.ref.id +' [value="' + this.options[index].value + '"]').selected = true;
                this.options[index].element = event.target;
                this.selected.push(index);
            } else {
                this.selected.splice(this.selected.lastIndexOf(index), 1);
                this.options[index].selected = false;
                document.querySelector('#'+ this.ref.id +' [value="' + this.options[index].value + '"]').selected = false;
            }

            this.triggerChange();
        },
        remove(obj) {
            const index = obj.index;
            this.options[index].selected = false;
            this.selected.splice(this.selected.lastIndexOf(index), 1);
            document.querySelector('#'+ this.ref.id +' [value="' + obj.value + '"]').selected = false;

            this.triggerChange();
        },
        loadOptions($ref) {
            this.ref = $ref;
            const options = $ref.options;

            for (let i = 0; i < options.length; i++) {
                const selected = options[i].getAttribute('selected') != null ? true : false;

                this.options.push({
                    value: options[i].value,
                    text: options[i].innerText,
                    selected: selected
                });

                if (selected) {
                    this.options[i].selected = true;
                    this.options[i].element = options[i];
                    this.selected.push(i);
                }
            }
        },
        selectedValues() {
            return this.selected.map((option)=>{
                return this.options[option].value;
            });
        },
        selectedItens() {
            const options = Object.assign({}, this.options);

            return this.selected.map((option) => {
                const $el = Object.assign({}, options[option]);

                return {
                    index: option,
                    text: $el.text,
                    value: $el.value,
                };
            });
        },
        triggerChange() {
            this.ref.dispatchEvent(new Event('change'));
        }
    };
}
