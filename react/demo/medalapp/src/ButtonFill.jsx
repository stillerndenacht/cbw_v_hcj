function ButtonFill({ symbol, filler }) {
  return (
    <div className="buttonbox">
      <button onClick={() => filler()}> {symbol} </button>
      <button> - </button>
    </div>
  );
}

export default ButtonFill;
