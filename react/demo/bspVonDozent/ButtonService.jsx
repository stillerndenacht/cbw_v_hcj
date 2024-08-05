// Funktionsreferenz als Eingabe für das Verhalten im Button
function ButtonService( { cap, behaviour } ) {
    return (
    <button onClick={() => behaviour()}>
        {cap}
    </button>
    );
}

export default ButtonService;
