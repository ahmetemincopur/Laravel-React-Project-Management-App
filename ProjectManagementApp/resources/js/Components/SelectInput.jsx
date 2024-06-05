import { forwardRef, useRef } from 'react';

export default forwardRef(function SelectInput({ className = '', children, ...props }, ref) {
    const select = ref ? ref : useRef();


    return (
        <div className="flex flex-col items-start">
            <select
                {...props}
                className={
                    'border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm ' +
                    className
                }
                ref={select}
            >
                {children}
            </select>
        </div>
    );
});