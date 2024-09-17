import React, {useEffect, useRef} from "react";

const NewMessageInput = ({ value, onchange, onSend}) => {
    const input = useRef();

    const onInputKeyDown = (ev) => {
        if (ev.key === "Enter" && !ev.shiftKey) {
            ev.preventDefault();
            onSend();
        }
    }

    const onChangeEvent = (ev) => {
        setTimeout(() => {
            adjustHeight();
        }, 10);
        onchange(ev);
    }

    const adjustHeight = () => {
        setTimeout(() => {
            input.current.style.height = "auto";
            input.current.style.height = input.current.scrollHeight + 1 + "px";
        }, 100);
    }

    useEffect(() => {
        adjustHeight();
    }, [value]);

    return (
        <textarea
        ref={input}
        value={value}
        rows={1}
        placeholder="Type a message..."
        onKeyDown={onInputKeyDown}
        onChange={(e) => {onChangeEvent(e)}}
        className="input input-bordered w-full resize-none rounded-r-none overflow-y-auto max-h-40"
        ></textarea>
    )
}

export default NewMessageInput;
