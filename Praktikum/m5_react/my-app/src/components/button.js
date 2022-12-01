// onlick event
const Button = (props) => {
  return (
    <div>
      <button onClick={() => props.clicked()}>Ini adalah button!</button>
    </div>
  );
};

// export button
export default Button;
